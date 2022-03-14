# Simple-Random-Picture

一个简易的随机图片API

## 参数

| 参数 | 可选/必选 | 类型   | 备注                                      |
| ---- | --------- | ------ | ----------------------------------------- |
| id   | 可选      | number | 如ID对应图片不存在则随机返回一张图片      |
| type | 可选      | string | [json]以json返回   [quantity]返回图片总数 |

## 使用

> api.php?id=[图片ID]&type=[返回类型]

### 直接使用

随机跳转至一张图片

### 带参数使用

返回指定图片：api.php?id=6

以json返回指定图片：api.php?id=6&type=json

返回图片总数示例：api.php?type=quantity

## 测试地址

[api.amarea.cn/getemilia](https://api.amarea.cn/getemilia)

[api.amarea.cn/getemilia?id=6&type=json](https://api.amarea.cn/getemilia?id=6&type=json)
