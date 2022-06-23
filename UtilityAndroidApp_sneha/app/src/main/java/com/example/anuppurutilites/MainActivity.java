package com.example.anuppurutilites;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import com.google.firebase.auth.FirebaseAuth;
import com.google.firebase.auth.FirebaseUser;


public class MainActivity extends AppCompatActivity {
    EditText t;
    Button b1;
    String t1;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        t=(EditText)findViewById(R.id.editTextNumber);
        b1= findViewById(R.id.button);
//        t1="+916269040396";
//        t1= String.valueOf(t.getText());



        b1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent  intent = new Intent(MainActivity.this,otp_register.class);
                if(t.getText().toString().isEmpty())
                {
                    Toast.makeText(getApplicationContext(), "Please Enter Number", Toast.LENGTH_LONG).show();
                }
                else if(t.getText().toString().length()<10)
                {
                    Toast.makeText(getApplicationContext(), "Number is less than 10", Toast.LENGTH_LONG).show();
                }
                else if(t.getText().toString().length()>10)
                {
                    Toast.makeText(getApplicationContext(), "Number is greater than 10", Toast.LENGTH_LONG).show();
                }
                else {
                    intent.putExtra("mobile", "+91" + t.getText().toString());
                    startActivity(intent);
                    System.out.println(t.getText());
                }

            }
        });


    }

    @Override
    protected void onStart() {
        super.onStart();
       FirebaseUser user= FirebaseAuth.getInstance().getCurrentUser();
       if (user!=null){
           startActivity(new Intent(MainActivity.this,homepage.class));
           finish();
       }
    }
}