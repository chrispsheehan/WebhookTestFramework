# WebhookTestFramework

## Resources

- ngrok [Video](https://www.youtube.com/watch?v=pVmtNH51mSE)

## Get started

- Install [ngrok](https://ngrok.com/download)

Run php file locally

```bash
php -S localhost:1234
```

start ngrok

```bash
ngrok http 1234 
```

ngrok output example

```bash
Session Status                online                                                 
Session Expires               1 hour, 31 minutes                                     
Version                       2.3.35                                                 
Region                        United States (us)                                     
Web Interface                 http://127.0.0.1:4040                                  
Forwarding                    http://[InstanceCode].ngrok.io -> http://localhost:1234  
Forwarding                    https://[InstanceCode].ngrok.io -> http://localhost:1234
```

## [PostMan](https://www.postman.com/) Test

Run a request, as per the below example.

![Postman Example](/images/postman-example.png?raw=true)

This should create a file at /tmp/ngroktest.log with the below content

```bash
{"some":"badgers"}
```
