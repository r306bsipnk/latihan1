import 'package:flutter/material.dart';

class Halaman1View extends StatelessWidget {
  const Halaman1View({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Aplikasi ku'),
      ),
      body: Center(
        child:Column(
          children: [
            Text("Hallo world"),
            ElevatedButton(onPressed: (){
                
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