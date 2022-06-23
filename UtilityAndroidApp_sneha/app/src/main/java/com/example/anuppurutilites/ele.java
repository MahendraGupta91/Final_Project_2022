package com.example.anuppurutilites;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.view.View;
import android.widget.ImageButton;

public class ele extends AppCompatActivity {
    ImageButton b1;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_ele);
        b1=findViewById(R.id.CALL);
        b1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent callingIntent=new Intent(Intent.ACTION_DIAL);
                callingIntent.setData(Uri.parse("tel:+91 8770786131"));
                startActivity(callingIntent);
            }
        });
    }
}