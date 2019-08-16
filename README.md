# WampSyncClient
Synchronous PHP client for WAMP protocol

## Quickstart

Anonymous access

```
$wamp = new \JSzczypk\WampSyncClient\Client("ws://127.0.0.1:9000/", "realm");
$result = $wamp->call('com.myapp.add2', [2, 3]);
```

With ticket or WAMP-CRA authentication

```
$wamp = new \JSzczypk\WampSyncClient\Client("ws://127.0.0.1:9000/", "realm", "user", "password");
$result = $wamp->call('com.myapp.add2', [2, 3]);
```
