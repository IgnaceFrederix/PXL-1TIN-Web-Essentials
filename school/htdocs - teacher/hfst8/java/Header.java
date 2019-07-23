import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.InputStreamReader;
import java.io.OutputStreamWriter;
import java.net.Socket;

public class Header {
    public static void main(String[] args) {
    
        String address = "127.0.0.1";
        int port = 80;
        String header = "GET /cursus/vb1.php HTTP/1.1\n"
                + "Host: localhost\n"
                + "Referer: http://localhost/cursus/test.php/\n"
                + "\r\n";
        try {
            Socket sck = new Socket(address, port);
            BufferedReader rd = new BufferedReader(new InputStreamReader(
            				sck.getInputStream()));
            BufferedWriter wr = new BufferedWriter(
                    new OutputStreamWriter(sck.getOutputStream(), 
             				"UTF-8"));
            wr.write(header);
            wr.flush();

            System.out.println("REQUEST HEADER");
            System.out.println(header);
            System.out.println("\n\nRESPONSE HEADER");
            String line;
            while ((line = rd.readLine()) != null) {
                System.out.println(line);
            }

            wr.close();
            rd.close();
            sck.close();

        } catch (Exception e) {
            e.printStackTrace();
        }

    }
}
