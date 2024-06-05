// Suggested code may be subject to a license. Learn more: ~LicenseLog:2965374326.
// Suggested code may be subject to a license. Learn more: ~LicenseLog:103488370.
// Suggested code may be subject to a license. Learn more: ~LicenseLog:1696965031.
// Suggested code may be subject to a license. Learn more: ~LicenseLog:4214546736.
import 'package:flutter/material.dart';
import 'package:get/get.dart';
import 'package:pertemuan3/controllers/login_controller.dart';

class LoginView extends StatelessWidget {
  final LoginController controller = Get.put(LoginController());

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Login'),
      ),
      body: Padding(
        padding: EdgeInsets.all(16),
        child: Column(
          children: [
            TextField(
              controller: controller.emailController,
              decoration: InputDecoration(
                labelText: 'Email',
              ),
            ),
            TextField(
              controller: controller.passwordController,
              decoration: InputDecoration(
                labelText: 'Password',
              ),
              obscureText: true,
            ),
            ElevatedButton(
              onPressed: () {
                controller.login();
              },
              child: Text('Login'),
            ),
          ],
        ),
      ),
    );
  }
}
