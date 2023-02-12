## Simple ACL Scaffolding

```php
Can::resource($user)->be()->deleted();
Can::resource($user)->delete($post);
Can::resource($user)->create(new Video());
```
