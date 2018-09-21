Przykład:

Instalacja:
```
composer require consultiait/mailer-interface
```

Kernel:
```php
new Mailer\MailerBundle\MailerBundle(),
```

Konfiguracja:

```yaml
consultia_mailer:
   producer: 'name_of_rabbitmq_producer'
```

```php
$message = new Message();
$message->setFrom('o.gunther@test.pl');
$message->setSubject('Test');
$message->addTo('o.gunther@test.pl');
$message->addContent('<b>Test value</b>', Content::HTML);
$message->addAttachment('test.txt', 'text/plain', base64_encode('test'));

echo $this->getContainer()->get('consultia_mailer.provider')->send($message);
```

TODO
- Walidacja