# WampSyncClient
Synchronous PHP client for WAMP protocol

## Quickstart

```
$wamp = new \SmartB2B\Wamp\Client("ws://wamprouter.domain.com:8080/", "myrealm", "user", "password");
$result = $wamp->call('com.domain.add', [1, 2]);
```
