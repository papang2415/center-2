package javaswingtutorial;

import java.awt.*;
import java.awt.event.*;
import java.net.UnknownHostException;
import javax.swing.*;

public class NewSample extends Frame implements ActionListener {

    JTextField textField;
    JLabel label;
    JButton button1;

    NewSample() {
        textField = new JTextField();
        label = new JLabel();
        button1 = new JButton("Get IP");

        textField.setBounds(50, 50, 150, 30);
        label.setBounds(40, 100, 250, 20);
        button1.setBounds(50, 150, 100, 30);

        button1.addActionListener(this);
        add(button1);
        add(textField);
        add(label);
        setSize(400, 400);
        setLayout(null);
        setVisible(true);

    }

    @Override
    public void actionPerformed(ActionEvent e) {
        try {
            String host = textField.getText();
            String ip = java.net.InetAddress.getByName(host).getHostAddress();
            label.setText("IP of " + host + " is: " + ip);
        } catch (UnknownHostException error) {
            System.out.println(e);
        }
    }

    public static void main(String[] args) {
        new NewSample();
    }
}
