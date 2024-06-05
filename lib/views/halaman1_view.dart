import 'package:flutter/material.dart';
import 'package:get/get.dart';
import 'package:pertemuan3/views/list_kamar.dart';

class Halaman1View extends StatelessWidget {
  const Halaman1View({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold( 
      appBar: AppBar(
        title: Text('Aplikasi kuy'),
      ),
      body: Center(

        child:Column(
          children: [
            Text("Hallo world"),
            ElevatedButton(onPressed: (){
                Get.to(()=>ListKamarView());
                
            }, child: Text('Tekan saya'))
          ],
        )
      ),
      bottomNavigationBar: BottomNavigationBar(items: [
        BottomNavigationBarItem(icon: Icon(Icons.home), label: 'Home'),
        BottomNavigationBarItem(icon: Icon(Icons.person), label: 'Profile'),
        BottomNavigationBarItem(icon: Icon(Icons.settings), label: 'Pengaturan'),
        
      ]),
    );
  }
}