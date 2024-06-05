
import 'dart:convert';

import 'package:flutter/widgets.dart';
import 'package:get/get.dart';
import 'package:http/http.dart' as http;
import 'package:pertemuan3/views/halaman1_view.dart';
import 'package:shared_preferences/shared_preferences.dart';

class LoginController extends GetxController{
final emailController = TextEditingController();
final passwordController = TextEditingController();


Future<void> login() async {
    try {
      final data = {
          'email': emailController.text,
          'password': passwordController.text,
        };
        print('data  $data');
      final response = await http.post(
        Uri.parse('http://10.88.0.3:81/api/pengguna/login'),
        body: data 
      );

      print('response : ${response.body}');
      final js = jsonDecode(response.body);
      
      if (response.statusCode == 200) {
         final token = js['token'];
          final prefs = await SharedPreferences.getInstance();
          prefs.setString('token', token);
          Get.off(()=>Halaman1View());

      } else {
          Get.snackbar("Gagal Login", js['message'] );
      }
    } catch (e) {
print(e);
    }
  }
}