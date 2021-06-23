.DEFAULT_GOAL := help

help:
	@echo ""
	@echo "Available tasks:"
	@echo "    test    Run all tests and generate coverage"
	@echo "    lint    Run only linter and code style checker"
	@echo "    unit    Run unit tests and generate coverage"
	@echo "    static  Run static analysis"
	@echo "    vendor  Install dependencies"
	@echo "    clean   Remove vendor and composer.lock"
	@echo ""

vendor: $(wildcard composer.lock)
	composer install --prefer-dist

lint: vendor
	vendor/bin/phplint . --exclude=vendor/
	vendor/bin/phpcs -p --standard=PSR2 --extensions=php --encoding=utf-8 --ignore=*/vendor/* .

unit: vendor
	vendor/bin/phpunit --coverage-text --coverage-clover=./.phpunit.cache/coverage.xml --coverage-html=./.phpunit.cache/html-coverage/

static: vendor
	vendor/bin/phpstan analyse src --level max

test: lint unit static

clean:
	rm -rf vendor
	rm composer.lock

.PHONY: help lint unit watch test travis clean