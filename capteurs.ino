String Niveau; 
String Pluit; 
void setup() { 
Serial.begin(9600); 
//signal de commande de relais
pinMode(8,OUTPUT); } 

void loop() { 
//lecture des valeurs analogiques des capteurs 
int nv= analogRead(A0);
//conversion de hu en pourcentage 
int hu=100-analogRead(A1)/10.23;
int P1=analogRead(A2); 
    if(nv<1023){ Niveau="critique<20%"; 
      } 
    else{ Niveau="normal"; } 
    //demarer la pomme 
    if(hu<22){ digitalWrite(8,HIGH); 
      } 
     //atteint la pone 
    else{ digitalWrite(8,LOW); } 
    if(P1<800){ 
      Pluit="oui"; 
      } 
    else{Pluit="non";} 
Serial.print(hu);
Serial.print("%"); 
Serial.print("/");
Serial.print(Niveau); 
Serial.print("/");
Serial.println(Pluit); 
delay(100); 1
}