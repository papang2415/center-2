package javaswingtutorial;

import java.awt.*;
import java.awt.event.*;
import javax.swing.*;

public class AddSubtract extends Frame implements ActionListener {

    JTextField textField1;
    JTextField textField2;
    JButton button1;
    JButton button2;
    JButton button3;
    JButton button4;
    JButton button5;
    JButton button6;
    JLabel label;

    AddSubtract() {
        textField1 = new JTextField();
        textField2 = new JTextField();
        label = new JLabel("Result: ");
        button1 = new JButton("Add");
        button2 = new JButton("minus");
        button3 = new JButton("Multiply");
        button4 = new JButton("Divide");
        button5 = new JButton("Exponential");
        button6 = new JButton("Modulo");

        textField1.setBounds(50, 50, 150, 30);
        textField2.setBounds(50, 100, 150, 30);
        button1.setBounds(50, 150, 100, 30);
        button2.setBounds(150, 150, 100, 30);
        button3.setBounds(50, 200, 100, 30);
        button4.setBounds(150, 200, 100, 30);
        button5.setBounds(50, 250, 100, 30);
        button6.setBounds(150, 250, 100, 30);
        label.setBounds(40, 300, 250, 30);

        button1.addActionListener(this);
        button2.addActionListener(this);
        button3.addActionListener(this);
        button4.addActionListener(this);
        button5.addActionListener(this);
        button6.addActionListener(this);
        add(button1);
        add(button2);
        add(button3);
        add(button4);
        add(button5);
        add(button6);
        add(textField1);
        add(textField2);
        add(label);
        setSize(400, 400);
        setLayout(null);
        setVisible(true);

    }

    double add;

    public void actionPerformed(ActionEvent e) {
        int c = 0;
        if (e.getSource() == button1) {
            c = Integer.parseInt(textField1.getText()) + Integer.parseInt(textField2.getText());
            String res = Integer.toString((int) c);
            label.setText((String) res);
        } else if (e.getSource() == button2) {
            c = Integer.parseInt(textField1.getText()) - Integer.parseInt(textField2.getText());
            String res = Integer.toString((int) c);
            label.setText((String) res);
        } else if (e.getSource() == button3) {
            c = Integer.parseInt(textField1.getText()) * Integer.parseInt(textField2.getText());
            String res = Integer.toString((int) c);
            label.setText((String) res);
        } else if (e.getSource() == button4) {
            c = Integer.parseInt(textField1.getText()) / Integer.parseInt(textField2.getText());
            String res = Integer.toString((int) c);
            label.setText((String) res);
        } else if (e.getSource() == button5) {
            c = calcExpo(Integer.parseInt(textField1.getText()), Integer.parseInt(textField2.getText()));
//            c = (int) Math.pow(Integer.parseInt(textField1.getText()), Integer.parseInt(textField2.getText()));
            String res = Integer.toString((int) c);
            label.setText((String) res);
        } else if (e.getSource() == button6) {
            c = Integer.parseInt(textField1.getText()) % Integer.parseInt(textField2.getText());
            String res = Integer.toString((int) c);
            label.setText((String) res);
        }

    }

    public static void main(String[] args) {
        new AddSubtract();
    }

    public static int expo(int y, int x) {
        int res = 1;
        for (int i = 1; i <= x; i++) {
            res *= y;
        }
        return res;
    }
    public static int calcExpo(int y, int x) {
       int 45 uy x1 = 1;
       for (int i = 1; i <= x; i++) {
           x1 *= y;
       }
       return x1;
   }
}
