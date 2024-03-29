# Help
TARGETS:=$(MAKEFILE_LIST)

define printSection
	@printf "\033[36m\n==================================================\033[0m\n"
	@printf "\033[36m $1 \033[0m"
	@printf "\033[36m\n==================================================\033[0m\n"
endef

.PHONY: help
help: ## This help
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(TARGETS) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

.PHONY: cs
cs: ## Checks the codestyle
	$(call printSection,CODE STYLE CHECKING)
	vendor/bin/php-cs-fixer fix --dry-run --stop-on-violation --diff

.PHONY: cs-fix
cs-fix: ## Automatically fixes the code style whenever possible
	$(call printSection,CODE STYLE FIXING)
	vendor/bin/php-cs-fixer fix

.PHONY: static
static: ## Runs static analysis
	$(call printSection,PHP STAN)
	vendor/bin/phpstan

.PHONY: unit
unit: ## Runs unit tests
	$(call printSection,UNIT TESTS)
	vendor/bin/phpunit tests/

.PHONY: all
all: ## Runs all checks : should be ran before commit ideally
	make cs static unit
