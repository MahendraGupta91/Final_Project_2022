package com.example.anuppurutilites;

import androidx.annotation.NonNull;
import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import com.google.android.gms.tasks.OnCompleteListener;
import com.google.android.gms.tasks.Task;
import com.google.firebase.FirebaseException;
import com.google.firebase.auth.AuthResult;
import com.google.firebase.auth.FirebaseAuth;
import com.google.firebase.auth.FirebaseAuthInvalidCredentialsException;
import com.google.firebase.auth.FirebaseUser;
import com.google.firebase.auth.PhoneAuthCredential;
import com.google.firebase.auth.PhoneAuthOptions;
import com.google.firebase.auth.PhoneAuthProvider;

import java.util.concurrent.TimeUnit;

public class otp_register extends AppCompatActivity {
    EditText t2;
    Button b2;
    String phone;
    FirebaseAuth mAuth;
    String otpid;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_otp_register);

        t2 = findViewById(R.id.editTextNumber2);
        b2 = findViewById(R.id.button2);
        phone = getIntent().getStringExtra("mobile").toString();
        System.out.println(phone);
        mAuth = FirebaseAuth.getInstance();
        initiateotp();
        b2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                if (t2.getText().toString().isEmpty()) {
                    Toast.makeText(getApplicationContext(), "blank field can not be process", Toast.LENGTH_LONG).show();
                } else if (t2.getText().toString().length() != 6) {
                    Toast.makeText(getApplicationContext(), "Invalid otp", Toast.LENGTH_LONG).show();
                } else {
                    PhoneAuthCredential credential = PhoneAuthProvider.getCredential(otpid, t2.getText().toString());
                    signInWithPhoneAuthCredential(credential);
                }
            }
        });
    }



    private void initiateotp() {
        PhoneAuthOptions options =
                PhoneAuthOptions.newBuilder(mAuth)
                        .setPhoneNumber(phone)       // Phone number to verify
                        .setTimeout(60L, TimeUnit.SECONDS) // Timeout and unit
                        .setActivity(this)                 // Activity (for callback binding)
                        .setCallbacks(new PhoneAuthProvider.OnVerificationStateChangedCallbacks() {
                            @Override
                            public void onCodeSent(@NonNull String s, @NonNull PhoneAuthProvider.ForceResendingToken forceResendingToken) {
                                otpid=s;
                            }

                            @Override
                            public void onVerificationCompleted(@NonNull PhoneAuthCredential phoneAuthCredential) {
                                signInWithPhoneAuthCredential(phoneAuthCredential);
                            }

                            @Override
                            public void onVerificationFailed(@NonNull FirebaseException e) {
                                Toast.makeText(getApplicationContext(),"something went worng",Toast.LENGTH_LONG).show();
                            }
                        })         // OnVerificationStateChangedCallbacks
                        .build();
        PhoneAuthProvider.verifyPhoneNumber(options);
    }

    private void signInWithPhoneAuthCredential(PhoneAuthCredential credential) {
        mAuth.signInWithCredential(credential)
                .addOnCompleteListener(this, new OnCompleteListener<AuthResult>() {
                    @Override
                    public void onComplete(@NonNull Task<AuthResult> task) {

                        if (task.isSuccessful()) {
//
                            startActivity(new Intent(otp_register.this,homepage.class));
                            finish();
                            System.out.println("welcome");
                        }
                        else {
                            Toast.makeText(getApplicationContext(),"something went worng",Toast.LENGTH_LONG).show();

                        }
                    }
                });
    }

}