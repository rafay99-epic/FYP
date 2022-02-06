void setup() {
  //sensor 1
  pinMode(13,INPUT);
  pinMode(3,INPUT);
  Serial.begin(9600);
  pinMode(9,OUTPUT);

//Sensor 2
  pinMode(13,INPUT);
  pinMode(7,INPUT);
  Serial.begin(9600);
  pinMode(9,OUTPUT);

  //Sensor 3
  pinMode(13,INPUT);
  pinMode(4,INPUT);
  Serial.begin(9600);
  pinMode(9,OUTPUT);
  
  //Sensor 4
  pinMode(13,INPUT);
  pinMode(5,INPUT);
  Serial.begin(9600);
  pinMode(9,OUTPUT);
  
    //Sensor 5
  pinMode(13,INPUT);
  pinMode(8,INPUT);
  Serial.begin(9600);
  pinMode(9,OUTPUT);
//
//    //Sensor 6
//  pinMode(13,INPUT);
//  pinMode(7,INPUT);
//  Serial.begin(9600);
//  pinMode(9,OUTPUT);
//  



}
void loop() {

 //Condition for Sernsor 1 
Serial.print("Sensor 1: ");
Serial.println(digitalRead(3));
if(digitalRead(3)==0)
{
  digitalWrite(13,HIGH);
   delay(200);
  }
 else{
    digitalWrite(13,LOW);
     delay(200);
    }

//Conditions for Sensor 2 
Serial.print("Sensor 2: ");
Serial.println(digitalRead(7));
if(digitalRead(7)==0)
{
  digitalWrite(13,HIGH);
   delay(200);
  }
 else{
    digitalWrite(13,LOW);
     delay(200);
    }

//Conditiosn for Sensor 3
Serial.print("Sensor 3: ");
Serial.println(digitalRead(4));
if(digitalRead(4)==0)
{
  digitalWrite(13,HIGH);
   delay(200);
  }
 else{
    digitalWrite(13,LOW);
     delay(400);
    }
//Conditiosn for Sensor 4
Serial.print("Sensor 4: ");
Serial.println(digitalRead(5));
if(digitalRead(5)==0)
{
  digitalWrite(13,HIGH);
   delay(400);
  }
 else{
    digitalWrite(13,LOW);
     delay(400);
    }
//Conditiosn for Sensor 5
Serial.print("Sensor 5: ");
Serial.println(digitalRead(8));
if(digitalRead(8)==0)
{
  digitalWrite(13,HIGH);
   delay(400);
  }
 else{
    digitalWrite(13,LOW);
     delay(400);
    }
 
}
