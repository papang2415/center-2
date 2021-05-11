package javaswingtutorial;

import java.awt.event.ActionEvent;
import javax.swing.*;

public class SwingExample {

    public static void main(String[] args) {
//        JFrame frame = new JFrame();
//        JButton button1 = new JButton("Click");
//        JButton button2 = new JButton("Hello");
//        
//        button1.setBounds(150, 100, 100, 50);
//        button2.setBounds(50, 100, 100, 50);
//        frame.add(button1);
//        frame.add(button2);
//        frame.setSize(400, 500);
//        frame.setLayout(null);
//        frame.setVisible(true);

        JFrame frame = new JFrame("Title");
        final JTextField textField = new JTextField();
        JButton button1 = new JButton("Click");

        textField.setBounds(50, 50, 150, 30);
        button1.setBounds(10, 100, 100, 30);

        button1.addActionListener((ActionEvent e) -> {
            textField.setText("Welcome to Java Swing!");
        });

        frame.add(textField);
        frame.add(button1);
        frame.setSize(300, 250);
        frame.setLayout(null);
        frame.setVisible(true);

    }
}
