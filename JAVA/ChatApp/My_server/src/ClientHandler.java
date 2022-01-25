import java.io.*;
import java.net.*;
import java.util.*;


class ClientHandler implements Runnable  
{ 
    Scanner scn = new Scanner(System.in); 
    private String name; 
    final DataInputStream dis; 
    final DataOutputStream dos; 
    Socket s; 
    boolean Online; 
      
    
    public ClientHandler(Socket s, String name, DataInputStream dis, DataOutputStream dos) { 
        this.dis = dis; 
        this.dos = dos; 
        this.name = name; 
        this.s = s; 
        this.Online=true; 
    } 
  
    @Override
    public void run() { 

      try{  
          dos.writeUTF("Please Enter Your name to contain (^-^)");
        String changename = dis.readUTF();
        
        
        
        for(ClientHandler mc : My_server.Clientarray){
        
            if( mc.name.equals(changename) )
            
            {
               dos.writeUTF("Exist name");
            dos.writeUTF("socket closed");
                      s.close(); 
                      
                      
                      
                      
                       }
            
            
            
            
            
        }
        
        
        
             
                            if(!s.isClosed()){
                               this.name = changename;
                              
                                   
                           
                           dos.writeUTF("\nYou got the name \n");
                           
                            }
                             
                             
                             
                           else if(s.isClosed()){
                          for(int b =0 ; b<My_server.Clientarray.size(); b++)
                            if(My_server.Clientarray.get(b).name==this.name) 
                                My_server.Clientarray.remove(b);
                            }
                       
                            
                        
                            
        
       }
      catch(Exception e){
          ;
      }
        String received; 
        while (true)  
        { 
            
            
            try
            { 
                dos.writeUTF("\n\n Welcome At Home \n\n Enter 'Menu' to see active Users \n\n Enter 'Chat' to Start "
                        + "Chatting with them \n\n Enter 'Block' to block a User \n\n Enter 'Exit' to close Connection with the Server (^-^) ");
             
                received = dis.readUTF(); 
                  
                System.out.println(received); 
                
                
                
                 if(received.equals("Exit")){ 
                    
                 
                         for(int b =0 ; b<My_server.Clientarray.size(); b++)
                             
                             
                        {
                           if(My_server.Clientarray.get(b).name==this.name)    
                            
                          
                        this.Online=false; 
                             this.s.close(); 
                           My_server.Clientarray.remove(b);
                               break;
                          
                        }    
                         
                         }
                
                //########################################################################
                
               else if(received.equals("Menu")){ 
                    
                 
                         for(int b =0 ; b<My_server.Clientarray.size(); b++)
                             
                             
                        {
                           if(My_server.Clientarray.get(b).name!=this.name)    
                            
                          dos.writeUTF("it's name "+My_server.Clientarray.get(b).name+" and it's id "+(b));
                        
                          
                        }
                         
                         }
              
                  
                //#########################################################################
                
                else if(received.equals("Block")) {  
                // break the string into message and recipient part 
                dos.writeUTF("To Block a user just write his name \n For example(User 1)");
                
                String received1 = dis.readUTF(); 
                  
            
                          for(int b =0 ; b<My_server.Clientarray.size(); b++)
                                                         
                        {
                            if(My_server.Clientarray.get(b).name == null ? received1 == null : My_server.Clientarray.get(b).name.equals(received1))
                             
                            {
     
                                
                             My_server.blacklist.add(0, My_server.Clientarray.get(b));
                             My_server.Clientarray.get(b).s.shutdownOutput();
                             My_server.Clientarray.get(b).s.shutdownInput();
                             My_server.Clientarray.get(b).s.close();
                            
                             
                             My_server.Clientarray.remove(b);
                             
                             dos.writeUTF("User has Blocked");
                             
                          
                            break;
                            }
                            
                            
                           
                        }
                         
                          
                      
                        
                        
                         
                          }
                
                //###############################################################################################
                else if(received.equals("Chat"))
                        {
                            
                            
                           
                            
                            boolean banner = true;
                            boolean flag = false;
                            while(banner)
                            {
                                flag=true;
                                  for(int b =0 ; b<My_server.Clientarray.size(); b++)
                             
                             
                        {
                           if(My_server.Clientarray.get(b).name==this.name)    
                            
                          dos.writeUTF("To send the Message write '#' then the client name for example( Hi #User 1) ");
                        
                          
                        }
                                  
                              String received2;
                               received2 = dis.readUTF(); 
                                if(received2.contains("#")){
               
                                    StringTokenizer st = new StringTokenizer(received2, "#"); 
             
                          String  MsgToSend = st.nextToken(); 
               
                          String  recipient = st.nextToken(); 
  
           
                for (ClientHandler mc : My_server.Clientarray)  
                { 
                    
                  
                    if (mc.name.equals(recipient) && mc.Online==true)  
                    { 
                        
                        
                        mc.dos.writeUTF(this.name+" : "+MsgToSend); 
                        
            
                        dos.writeUTF("Message sent correctly");
                        flag=false;
                        break; 
                    }}
                if(flag==true){
                
                 for(int b =0 ; b<My_server.Clientarray.size(); b++)  
                { 
                     if(My_server.Clientarray.get(b).name!=this.name) {
                               dos.writeUTF("There is no user with this name But you can try again (^-^)")  ;
                               break;
                  }                      
                }
                    
               
                                 }   
                                }
                 for(int b =0 ; b<My_server.Clientarray.size(); b++)
                             
                 {
                        
                           if(My_server.Clientarray.get(b).name==this.name)    {
                            
                          dos.writeUTF("If you want to Exit chat write 'Back' if not just write anything ");
                           
                          
                          
                          
                               String received3;
                           received3 = dis.readUTF();
                 
                          if(received3.equals("Back"))
                              
                          {
                              dos.writeUTF("Done");
                              
                              banner = false;
                              
                          }
                          
                           }
                          break;
                 }
                
                               
                            }
                            
                        }
                
                
                //#########################################################################
                
                else  {  
               
                
                    dos.writeUTF("\nWrong Input please try again (^-^)\n");
                
                }
            
                 //###########################################################
                 
                 
                 
            } catch (IOException e) { 
                  
               
            } 
              
        } 
        
    } 
} 