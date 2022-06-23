package com.example.anuppurutilites;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class Policestation extends AppCompatActivity {
    Button b1,b2,b3,b4,b5,b6,b7,b8,b9,b10,b11;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.policestation);
        b1=findViewById(R.id.button10);
        b1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent callingIntent=new Intent(Intent.ACTION_DIAL);
                callingIntent.setData(Uri.parse("tel:+91 8770786131"));
                startActivity(callingIntent);
            }
        });
        b2=findViewById(R.id.button8);
        b2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent callingIntent=new Intent(Intent.ACTION_DIAL);
                callingIntent.setData(Uri.parse("tel:+91 8770786131"));
                startActivity(callingIntent);
            }
        });
        b3=findViewById(R.id.button9);
        b3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent callingIntent=new Intent(Intent.ACTION_DIAL);
                callingIntent.setData(Uri.parse("tel:+91 8770786131"));
                startActivity(callingIntent);
            }
        });
        b4=findViewById(R.id.button12);
        b4.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent callingIntent=new Intent(Intent.ACTION_DIAL);
                callingIntent.setData(Uri.parse("tel:+91 8770786131"));
                startActivity(callingIntent);
            }
        });
        b5=findViewById(R.id.button6);
        b5.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent callingIntent=new Intent(Intent.ACTION_DIAL);
                callingIntent.setData(Uri.parse("tel:+91 8770786131"));
                startActivity(callingIntent);
            }
        });
        b6=findViewById(R.id.button7);
        b6.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent callingIntent=new Intent(Intent.ACTION_DIAL);
                callingIntent.setData(Uri.parse("tel:+91 8770786131"));
                startActivity(callingIntent);
            }
        });
        b7=findViewById(R.id.button5);
        b7.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent callingIntent=new Intent(Intent.ACTION_DIAL);
                callingIntent.setData(Uri.parse("tel:+91 8770786131"));
                startActivity(callingIntent);
            }
        });
        b8=findViewById(R.id.button1);
        b8.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent callingIntent=new Intent(Intent.ACTION_DIAL);
                callingIntent.setData(Uri.parse("tel:+91 8770786131"));
                startActivity(callingIntent);
            }
        });
        b9=findViewById(R.id.button17);
        b9.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent callingIntent=new Intent(Intent.ACTION_DIAL);
                callingIntent.setData(Uri.parse("tel:+91 8770786131"));
                startActivity(callingIntent);
            }
        });
        b10=findViewById(R.id.button3);
        b10.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent callingIntent=new Intent(Intent.ACTION_DIAL);
                callingIntent.setData(Uri.parse("tel:+91 8770786131"));
                startActivity(callingIntent);
            }
        });
        b11=findViewById(R.id.button4);
        b11.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent callingIntent=new Intent(Intent.ACTION_DIAL);
                callingIntent.setData(Uri.parse("tel:+91 8770786131"));
                startActivity(callingIntent);
            }
        });


    }
}