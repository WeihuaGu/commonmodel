# commonmodel
##通用模型

现在新的框架层出不穷，功能实现只需要引用相应的库，这就给了开发者以机会来深入应用的核心——模型。网站的架构设计，传统的做法是三段论，而其中最重要的是业务模型的构建，它又有赖于模型与数据层。并不只是网站架构，其它类型的架构也能从中带来益处。所以这个项目专注于构建最为通用的模型。

## 安装(Installation)

```
$ composer install weihuagu/commonmodel
```

或者 `composer.json`:

```
"require": {
	"weihuagu/commonmodel":"*"
}
```

```
$ composer install
```

## 使用(Usage)
### 1：获得commonmodel容器
