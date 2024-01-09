# callapsule-run

Abstracted way to execute any callable.

I had to add this kind of feature on two packages still in development.
So, i decided to create this package that i can reuse.

The interface has just one method to run a given callable with given parameters.

**RunningStrategy**::call(_callable_, _?array_): _mixed_

This package provides the simplest implementation of this abstration : **BasicRunner**.

That's all for now...
