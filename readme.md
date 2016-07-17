# Network helpers

[![Build Status](https://img.shields.io/travis/weew/helpers-network.svg)](https://travis-ci.org/weew/helpers-network)
[![Test Coverage](https://img.shields.io/coveralls/weew/helpers-network.svg)](https://coveralls.io/github/weew/helpers-network)
[![Version](https://img.shields.io/packagist/v/weew/helpers-network.svg)](https://packagist.org/packages/weew/helpers-network)
[![Licence](https://img.shields.io/packagist/l/weew/helpers-network.svg)](https://packagist.org/packages/weew/helpers-network)

## Table of contents

- [Installation](#installation)
- [Introduction](#introduction)
- [Functions](#functions)
    - [ping](#ping)

## Installation

`composer require weew/helpers-network`

## Introduction

This tiny library provides various helper functions for network interaction.

## Functions

### ping

Ping a host, returns latency if the host could be reached, otherwise returns `false`. Note: works ony on `Linux` and `OS X`.

`int|bool ping(string $host, [, int $timeout = 1 [, $ttl = 255]])`
