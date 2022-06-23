package com.example.anuppurutilites;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.ImageButton;
import android.widget.Toast;

public class Hospital extends AppCompatActivity {
 ImageButton b1 ;
 ImageButton b2;
 ImageButton b3;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_hospital);
       b1=findViewById(R.id.callBtn);
       b1.setOnClickListener(new View.OnClickListener() {
           @Override
           public void onClick(View view) {
               Intent callingIntent=new Intent(Intent.ACTION_DIAL);
               callingIntent.setData(Uri.parse("tel:+91 8770786131"));
               startActivity(callingIntent);
           }
       });
       b2=findViewById(R.id.call1);
       b2.setOnClickListener(new View.OnClickListener() {
           @Override
           public void onClick(View view) {
               Intent callingIntent=new Intent(Intent.ACTION_DIAL);
               callingIntent.setData(Uri.parse("tel:+91 8770786131"));
               startActivity(callingIntent);
           }
       });
       b3=findViewById(R.id.call2);
       b3.setOnClickListener(new View.OnClickListener() {
           @Override
           public void onClick(View view) {
               Intent callingIntent=new Intent(Intent.ACTION_DIAL);
               callingIntent.setData(Uri.parse("tel:+91 8770786131"));
               startActivity(callingIntent);
           }
       });
    }
}