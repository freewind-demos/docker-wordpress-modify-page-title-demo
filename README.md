Docker Wordpress Custom Plugin Hello in Head and Footer Demo
=============================================================

如何在一个最简单的wordpress plugin中，在`<head>`与footer里输出一些内容。

```
npm run up
```

Admin登录地址： <http://localhost:20080/wp-admin>

```
freewind
123456
```

## Build Plugin

```
npm run build-plugin
```

将生成`dist/plugin.zip`

然后在wordpress后台，将该plugin上传并启用。之后打开页面，会看到在`<head>`中有插入的javascript内容，以及`</body>`前插入的footer内容。

