<?php

test('that no debug statements have been left')
    ->expect(['dd', 'dump', 'die'])
    ->not->toBeUsed();
