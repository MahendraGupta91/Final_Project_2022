
package com.example.anuppurutilites;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.ImageButton;

public class Emergency extends AppCompatActivity {
    ImageButton B1;
    ImageButton B2;
    ImageButton B3;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_emergrncy);
        B1=findViewById(R.id.CALL1);
        B1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent callingIntent=new Intent(Intent.ACTION_DIAL);
                callingIntent.setData(Uri.parse("tel:+918770786131"));
                startActivity(callingIntent);
            }
        });
        B2=findViewById(R.id.CALL2);
        B2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent callingIntent =new Intent(Intent.ACTION_DIAL);
                callingIntent.setData(Uri.parse("tel:+918770786131"));
                startActivity(callingIntent);
            }
        });
        B3=findViewById(R.id.CALL3);
        B3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent callingIntent =new Intent(Intent.ACTION_DIAL);
                callingIntent.setData(Uri.parse("tel:+918770786131"));
                startActivity(callingIntent);
            }
        });
    }
}