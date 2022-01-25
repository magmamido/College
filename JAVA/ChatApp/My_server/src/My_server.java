import java.io.*; 
import java.util.*; 
import java.net.*; 
  

public class My_server  
{ 
  
     
    static ArrayList<ClientHandler> Clientarray = new ArrayList<>(); 
    static ArrayList<ClientHandler> blacklist = new ArrayList<>();
      
  
    static int i = 0; 
  
    public static void main(String[] args) throws IOException  
    { 
        
        ServerSocket ss = new ServerSocket(2020); 
          
        Socket s; 
          
        
        while (true)  
        { 
           
            s = ss.accept(); 
  
            System.out.println("New User request : " + s); 
              
           
            DataInputStream dis = new DataInputStream(s.getInputStream()); 
            DataOutputStream dos = new DataOutputStream(s.getOutputStream()); 
              
            System.out.println("Listing for User..."); 
  
            
            
            ClientHandler match = new ClientHandler(s,"User " + i, dis, dos); 
  
            
            
            Thread t = new Thread(match); 
              
            System.out.println("Added this User to Userlist"); 
  
             
            Clientarray.add(match); 
  
          
            
            t.start(); 
  
            
            i++; 
  
        } 
    } 
} 
 
