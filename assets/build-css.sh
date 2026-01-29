#!/bin/bash
#
# Quick and dirty CSS bundler for Webbiecorn Starter V2
#
# This script concatenates critical base CSS files into a single bundle
# to reduce render-blocking HTTP requests.
#
# SOURCE FILES (in order):
# 1. base.css
# 2. header.css
# 3. buttons.css
# 4. footer.css
# 5. animations.css
# 6. responsive.css
# 7. cookie-consent.css
#
# OUTPUT FILE:
# - assets/css/bundle.css
#

# Navigate to the script's directory to ensure correct relative paths
cd "$(dirname "$0")" || exit

# Define source and destination files
CSS_DIR="css"
BUNDLE_FILE="$CSS_DIR/bundle.css"
SOURCE_FILES=(
    "$CSS_DIR/base.css"
    "$CSS_DIR/header.css"
    "$CSS_DIR/buttons.css"
    "$CSS_DIR/footer.css"
    "$CSS_DIR/animations.css"
    "$CSS_DIR/responsive.css"
    "$CSS_DIR/cookie-consent.css"
)

# Clear the existing bundle file to start fresh
> "$BUNDLE_FILE"

# Concatenate all source files into the bundle
for file in "${SOURCE_FILES[@]}"; do
    if [ -f "$file" ]; then
        cat "$file" >> "$BUNDLE_FILE"
        echo "" >> "$BUNDLE_FILE" # Add a newline between files
    else
        echo "Warning: CSS file not found at $file"
    fi
done

echo "✅ CSS bundle created at $BUNDLE_FILE"
