import 'package:get/get.dart';
import 'package:pull_to_refresh/pull_to_refresh.dart';

class ListKamarController extends GetxController {
  RefreshController refreshController = RefreshController(initialRefresh: true);
  RxBool isLoading = false.obs;
  RxList kamarList = [].obs;

  // Method untuk refresh data
  Future<void> refreshData() async {
      
      refreshController.refreshCompleted();
  }

  // Method untuk load more data
  Future<void> loadMoreData() async {
      refreshController.loadComplete();
  }
}
