# Code Smell & Refactoring

## Bloaters

### Long Method
> You have a code fragment that can be grouped together.

`Solution`

> Turn the fragment into a method whose name explains the purpose of the method.

> Martin Fowler (http://martinfowler.com/)

### Large Class
> You have one class doing work that should be done by two.

`Solution`

> Create a new class and move the relevant fields and methods from the old class into the new class.
> Martin Fowler (http://martinfowler.com/)

### Data Clumps
> This is one of my favorite CodeSmells from the refactoring book. You spot it when you constantly see the same few
  data items passed around together. start and end are a good example of a data clump wanting to be a range.
  Often data clumps are primitive values that nobody thinks to turn into an object.

`Solution`

> The first step is to replace data clumps with objects and use the objects whenever you see them.
  An immediate benefit is that you'll shrink some parameter lists. The interesting stuff happens as you begin to look for
  behavior to move into the new objects.

> Martin Fowler (http://martinfowler.com/)


- Long Parameter List
- Primitive Obsession

## Tool Abusers
- Switch Statements
- Refused Bequest
- Alternative Classes w/ Different Interfaces
- Temporary Field

## Change Preventers
- Divergent Change
- Shotgun Surgery
- Parallel Inheritence Hierarchie

## Dispensables
- Lazy Class
- Speculative Generality
- Data Class
- Duplicated Code

## Couplers
- Feature Envy
- Inappropriate Intimacy
- Message Chains
- Middle Man