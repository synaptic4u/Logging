# Logging

Logging in a simplified way to a file or DB.

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Configuration](#configuration)
- [Contributing](#contributing)
- [License](#license)

## Introduction

This project provides a simplified logging mechanism that allows you to log messages to a file or a database. It is designed to be easy to integrate into your existing applications.

## Features

- Log messages to a file
- Log messages to a database
- Configurable logging levels (e.g., DEBUG, INFO, WARN, ERROR)
- Easy to set up and use

## Installation

To install the logging library, you can use composer:
The followig are cofiguratio files supported.
Please add them to project directory.

tests/.env
tests/config.json
tests/configNested.json

```bash
composer install syaptic4u/logging

composer dump-autoload -o

composer exec install
```
Then follow the prompts.

