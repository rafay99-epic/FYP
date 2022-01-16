void setup() {
  pinMode(13,INPUT);
  pinMode(3,INPUT);
  Serial.begin(9600);
  pinMode(9,OUTPUT);


  pinMode(13,INPUT);
  pinMode(5,INPUT);
  Serial.begin(9600);
  pinMode(9,OUTPUT);
}
void loop() {
  
Serial.print("Sensor 1: ");
Serial.println(digitalRead(3));
if(digitalRead(3)==0)
{
  digitalWrite(13,HIGH);
   delay(10);
  }
 else{
    digitalWrite(13,LOW);
     delay(10);
    }

Serial.print("Sensor 2: ");
Serial.println(digitalRead(5));
if(digitalRead(5)==0)
{
  digitalWrite(13,HIGH);
   delay(10);
  }
 else{
    digitalWrite(13,LOW);
     delay(10);
    }


 
}
