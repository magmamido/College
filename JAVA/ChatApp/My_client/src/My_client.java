import java.io.*;
import java.net.*;
import java.util.Scanner;

public class My_client {

    final static int ServerPort = 2020;

    public static void main(String args[]) throws  IOException ,UnknownHostException
    {
        Scanner scn = new Scanner(System.in);

        InetAddress ip = InetAddress.getByName("localhost");

        Socket s = new Socket(ip, ServerPort);

        DataInputStream dis = new DataInputStream(s.getInputStream());
        DataOutputStream dos = new DataOutputStream(s.getOutputStream());

        Thread MessageToClient = new Thread(new Runnable() {
            @Override
            public void run() {
                while (true) {

                    String msg = scn.nextLine();

                    try {

                        dos.writeUTF(msg);
                    } catch (IOException e) {
                        e.printStackTrace();
                    }
                }
            }
        });

        Thread MessageToServer = new Thread(new Runnable() {
            @Override
            public void run() {

                while (true) {
                    try {

                        String msg = dis.readUTF();
                        System.out.println(msg);
                    } catch (IOException e) {

                    }
                }
            }
        });

        MessageToServer.start();
        MessageToClient.start();

    }
}
