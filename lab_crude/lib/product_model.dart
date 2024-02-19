// To parse this JSON data, do
//
//     final product = productFromJson(jsonString);

import 'dart:convert';

Product productFromJson(String str) => Product.fromJson(json.decode(str));

String productToJson(Product data) => json.encode(data.toJson());

class Product {
  int id;
  String pdName;
  int pdType;
  int pdPrice;

  Product({
    required this.id,
    required this.pdName,
    required this.pdType,
    required this.pdPrice,
  });

  factory Product.fromJson(Map<String, dynamic> json) => Product(
        id: json["id"],
        pdName: json["product_name"],
        pdType: json["product_type"],
        pdPrice: json["price"],
      );

  Map<String, dynamic> toJson() => {
        "pd_name": pdName,
        "pd_type": pdType,
        "pd_price": pdPrice,
      };
}
