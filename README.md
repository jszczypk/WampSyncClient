# WampSyncClient
Synchronous (blocking) PHP client for WAMP protocol implementing Caller and Publisher roles

## Quickstart

Installation
```composer require bkwtools/wampsyncclient```

Anonymous connections

```
$wamp = new \BKWTools\WampSyncClient\Client("ws://127.0.0.1:9000/", "realm");
$result = $wamp->call('com.myapp.add2', [2, 3]);
```

With ticket or WAMP-CRA authentication

```
$wamp = new \BKWTools\WampSyncClient\Client("ws://127.0.0.1:9000/", "realm", "user", "password");
$result = $wamp->call('com.myapp.add2', [2, 3]);
```

## Notes

Websocket implementation is not able to receive PING packets and reply with PONG packets when it is not actively exchanging message with router.
The connection should then be used for short time with pauses between messages shorter then PING setting on the server. If you need to make longer break, please destroy the Client object and create new one.
