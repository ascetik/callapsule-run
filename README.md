# callapsule-run

Abstracted way to execute any callable.

## Release notes

> Version 0.1.0 : (draft)

I had to develop this kind of feature on two or three packages still in development.
So, i decided to create this one for reuse.

The interface has just one method :

**RunningStrategy**::call(_callable_, _?array_): _mixed_

## Usage

The simplest implementation of this abstration is included : **BasicRunner**.

```php

$runner = new BasicRunner();
echo $runner->call(fn(string $name) => 'hello '.$name, [ 'John' ]); // "hello John"

```
