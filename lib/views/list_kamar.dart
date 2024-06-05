import 'package:flutter/material.dart';
import 'package:get/get.dart'; 
import 'package:pertemuan3/controllers/kamar_controller.dart';
import 'package:pull_to_refresh/pull_to_refresh.dart';

class ListKamarView extends StatelessWidget {
  final kamarController = Get.put(ListKamarController());

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text('List Kamar'),
      ),
      body: SmartRefresher(
        controller: kamarController.refreshController,
        enablePullDown: true,
        enablePullUp: true,
        onRefresh: kamarController.refreshData,
        onLoading: kamarController.loadMoreData,
        child: Obx(() {
          if (kamarController.isLoading.value) {
            return const Center(child: CircularProgressIndicator());
          } else {
            return ListView.builder(
              itemCount: kamarController.kamarList.length,
              itemBuilder: (context, index) {
                return ListTile(
                  leading: Image.network(kamarController.kamarList[index].fotoKamar),
                  title: Text(kamarController.kamarList[index].namaKamar),
                  subtitle: Text(kamarController.kamarList[index].harga.toString()),
                );
              },
            );
          }
        }),
      ),
    );
  }
}
