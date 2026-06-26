#!/usr/bin/env bash
# Verify deploy bundle before rsync --delete.
set -euo pipefail

ROOT="${1:?usage: verify-deploy-bundle.sh <bundle-root>}"
LABEL="${2:-bundle}"

require_file() {
	local rel="$1"
	if [ ! -f "$ROOT/$rel" ]; then
		echo "[$LABEL] ERROR: missing $rel"
		exit 1
	fi
}

require_file "wp-content/themes/atk-ved-theme/style.css"
require_file "wp-content/themes/atk-ved-theme/functions.php"
require_file "wp-content/themes/atk-ved-theme/front-page.php"

echo "[$LABEL] OK: atk-ved-theme bundle"
