# hsioe-zero

`hsioe-zero` 是基于webman配置的服务端快速启动脚手架

- 后台管理
- 定时任务
- 异步任务（基于[hsioe-job](https://github.com/dhsioe/jobs)）
- 自定义配置
- 二级缓存 (基于 yac 构建更适合高吞吐量的数据缓存)

## 前言

项目诞生背景是想借助组件化方式重构当前正在运行的 量化交易程序。

早起量化交易服务模块掺杂太多的子模块和依赖且大部分都是引用方式，导致维护成本逐步变高，服务组件化势在必行，于是诞生了设计一个脚手架并且用脚手架重构量化交易系统的想法！

## 安装

使用 [composer](https://getcomposer.org/download/) 来搭建一个基于`hsioe-zero`脚手架的项目非常简单, 运行以下命令即可完成
```sh
composer create-project "hsioe/zero" ./
```

确保脚手架的所有主键能正常运行，建议`php环境 >= 8.1`

## 快速开始

安装完成后,系统会再根目录生成 `.env` 文件，需要你自行配置本地的数据库信息
```angular2html
DB_HOST=127.0.0.1
DB_PORT=3306
DB_NAME=test
DB_USER=foo
DB_PASSWORD=123456
```

相关配置完成后，运行以下命令

- windos用户
```angular2html
cd /you_project;
php windows.php
```

- Linux / Mac 用户
```angular2html
cd /you_project;
php start.php start
```
- docker

基于在 `windows`平台下开发调试YAC缓存存在兼容性问题，小伙伴也可以尝试使用[docker]()来部署本地环境，镜像已经配好,运行以下命令即可快速启动
```dockerfile
docker-compose -f ./deploy/docker-compose.yml up -d
```

执行完以上命令后，浏览器打开 http://127.0.0.1:8788/app/admin 看到以下界面即为安装成功

## 更新日志
 - 2024/06/19 发布1.0.4版本
 - 2024-06-14 发布v1.0.0版本