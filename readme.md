# Network helpers

[![Build Status](https://img.shields.io/travis/weew/php-helpers-network.svg)](https://travis-ci.org/weew/php-helpers-network)
[![Test Coverage](https://img.shields.io/coveralls/weew/php-helpers-network.svg)](https://coveralls.io/github/weew/php-helpers-network)
[![Version](https://img.shields.io/packagist/v/weew/php-helpers-network.svg)](https://packagist.org/packages/weew/php-helpers-network)
[![Licence](https://img.shields.io/packagist/l/weew/php-helpers-network.svg)](https://packagist.org/packages/weew/php-helpers-network)

## Table of contents

- [Installation](#installation)
- [Introduction](#introduction)
- [Functions](#functions)
    - [ping](#ping)

## Installation

`composer require weew/php-helpers-network`

## Introduction

This tiny library provides various helper functions for network interaction.

## Functions

### ping

Ping a host, returns latency if the host could be reached, otherwise returns `false`. Note: works ony on `Linux` and `OS X`.

`int|bool ping(string $host, [, int $timeout = 1 [, $ttl = 255]])`
