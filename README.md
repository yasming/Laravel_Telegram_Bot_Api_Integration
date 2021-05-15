# Telegram_Api_Integration

This project is an api to receive messages from one telegram bot and send a message back to the user, after the message being receive and the queue of messages being processed

## Prerequisites

```
Docker
```

```
Ngrok
```

### API Postman Collection

```
https://www.getpostman.com/collections/2c44d41e1a6bf7290440
```

### API Swagger Documentation

```
https://app.swaggerhub.com/apis-docs/yasminguimaraes/PROPERTIES_API/1.0.0
```

### How to run project's locally

```
First of all is need to download https://ngrok.com/download and run it like this: ./ngrok http 80
```

```
Fill this three enviroment variables(on .env.example) with your bot's information:

TELEGRAM_BOT_TOKEN=
TELEGRAM_BOT_AND_TOKEN=

This follow one is needed to fill with the url(HTTPS) you got from ngrok and the bot's token:

TELEGRAM_WEBHOOK_API_URL=https://{url}/api/get-updates-from-bot/{token}
```

```
after this run docker-compose up and after all things be built the project will be able to be access on localhost:80
```

### Getting started

```
First is need to send a post for the follow endpoint to set bot's webhook url, this is the url
that will receive all request from the bot, when someone send a message for your bot
```

```
POST
```

```
/api/set-webhook
```


```
In case of your bot already have a webhook url you can delete this in the follow endpoint
```

```
POST
```

```
/api/delete-webhook
```
