Przykład:

Konfiguracja:

```yaml

```

```php
$message = new Message();
$message->setFrom('o.gunther@test.pl');
$message->setSubject('Test');
$message->addTo('o.gunther@test.pl');
$message->addContent('<b>Test value</b>', Content::HTML);
$message->addAttachment('test.txt', 'text/plain', base64_encode('test'));

echo $this->getContainer()->get('jms_serializer')->serialize($message, 'json');
```

TODO
- Walidacja