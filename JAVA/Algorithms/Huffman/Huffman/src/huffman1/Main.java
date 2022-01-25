package huffman1;

import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileWriter;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Scanner;

public class Main {
         char checker;
	static Node node;
	static Node newRoot;
	static String codedString = "";

	public static void main(String[] args) throws FileNotFoundException {
                Scanner sc = new Scanner(new File("huffman.txt"));            
                String mhnuma="";
                mhnuma = sc.nextLine();
		char[] mnmxar = mhnuma.toCharArray();  
		ArrayList<Character> Character = new ArrayList<Character>();

		for (int i = 0; i < mnmxar.length; i++) {      
			if (!(Character.contains(mnmxar[i]))) {  
				Character.add(mnmxar[i]);
			}
		}
		
		 System.out.println("Character : "+Character);                          
                 System.out.println("Number of Characters "+mnmxar.length);           
		int[] countOfChar = new int[Character.size()];           
		for (int x = 0; x < countOfChar.length; x++) {           
			countOfChar[x] = 0;
		}
		for (int i = 0; i < Character.size(); i++) {              
			char checker = Character.get(i);
			for (int x = 0; x < mnmxar.length; x++) {
				if (checker == mnmxar[x]) {
					countOfChar[i]++;
				}
			}
		}
		for (int i = 0; i < countOfChar.length - 1; i++) {
			for (int j = 0; j < countOfChar.length - 1; j++) {        
				if (countOfChar[j] < countOfChar[j + 1]) {
					int temp = countOfChar[j];
					countOfChar[j] = countOfChar[j + 1];
					countOfChar[j + 1] = temp;

					char tempChar = Character.get(j);
					Character.set(j, Character.get(j + 1));
					Character.set(j + 1, tempChar);
				}
			}
		}
                System.out.println("-----------------------------------------------------------------------------");   
		for (int x = 0; x < countOfChar.length; x++) {
                    
		System.out.println("Character "+Character.get(x) + " has written " +countOfChar[x]+" times from total Characters text of "+mnmxar.length );     
                        
		}
                System.out.println("-----------------------------------------------------------------------------");   
		
                /* Form Leaf Nodes and Arrange them in a linked list */

		Node root = null;
		Node current = null;
		Node end = null;

		for (int i = 0; i < countOfChar.length; i++) {
			Node node = new Node(Character.get(i).toString(), countOfChar[i]);
			if (root == null) {
				root = node;
				end = node;
			} else {
				current = root;
				while (current.linker != null) {
					current = current.linker;
				}
				current.linker = node;
				current.linker.linkerBack = current;
				end = node;
			}
		}
		dentro(root, end);
		inOrder(node);
		char[] messageArray = mhnuma.toCharArray();
	        char checker;
              int k=0;
		for (int i = 0; i < messageArray.length; i++) {      
                    
			current = node;
			checker = messageArray[i];
			int code = 0;
			while (true) {
				if (current.left.value.toCharArray()[0] == checker) {
					code += 0;
					break;
				} else {
					code += 1;
					if (current.right != null) {
						if (current.right.value.toCharArray()[0] == Character
                                                        .get(countOfChar.length - 1)) {
							break;
						}
						current = current.right;
					} else {
						break;
					}
				}
			}                   
                        if(k<countOfChar.length+3){
                         try { 
                    FileWriter writer = new FileWriter("codegr.cm", true);     
                    writer.write(checker +"-"+code);
                    writer.write("\r\n");  
                    k++;
                    writer.close();
                 } catch (IOException e) {
                     e.printStackTrace();
                       }
                        }
			codedString += code+"\n";    
                }
                System.out.println("the table with the encoding characters can be found in the codegr file");
		System.out.println("the encoded input is in the code file");
                try {
                    FileWriter writer = new FileWriter("code.huf", true);
                    writer.write(codedString);
                    
                    writer.write("\r\n");  
                    
                    writer.close();
                 } catch (IOException e) {
                     e.printStackTrace();
                    }
                }
	public static void inOrder(Node root) {

		if (root != null) {
			inOrder(root.left);
			
			inOrder(root.right);
		}
	}
	public static void dentro(Node root, Node end) {
		node = new Node(end.linkerBack.value + end.value, end.linkerBack.count
				+ end.count);
		node.left = end.linkerBack;
		node.right = end;
		end.linkerBack.linkerBack.linker = node;
		node.linkerBack = end.linkerBack.linkerBack;
		end = node;
		end.linker = null;
		Node current = root;

		while (current.linker != null) {			
			current = current.linker;
		}

		if (root.linker == end) {
			node = new Node(root.value + end.value, root.count + end.count);
			node.left = root;
			node.right = end;
			node.linker = null;
			node.linkerBack = null;
			
			newRoot = node;
		} else {
			dentro(root, end);
		}
	}

}
class Node {
	String value;
	int count;
	Node left;
	Node right;
	Node linker;
	Node linkerBack;
	Node(String value, int count) {

		this.value = value;
		this.count = count;
		this.left = null;
		this.right = null;
		this.linker = null;
		this.linkerBack = null;
	}

}