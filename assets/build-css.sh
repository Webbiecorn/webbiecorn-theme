#!/bin/bash
#
# Quick CSS bundler for Webbiecorn Starter V2
# Combines common CSS files into a single bundle to reduce HTTP requests.
#
# Run this script from the theme root directory:
# ./assets/build-css.sh

# Get the directory of the script to ensure paths are correct
SCRIPT_DIR="$(dirname "$0")"
CSS_DIR="$SCRIPT_DIR/css"
OUTPUT_FILE="$CSS_DIR/bundle.css"

# CSS files to be bundled, in order of dependency
FILES=(
  "base.css"
  "header.css"
  "buttons.css"
  "footer.css"
  "animations.css"
  "responsive.css"
  "cookie-consent.css"
)

# Clear the output file to start fresh
> "$OUTPUT_FILE"

# Concatenate files
for FILE in "${FILES[@]}"; do
  echo "/* --- Appending ${FILE} --- */" >> "$OUTPUT_FILE"
  cat "$CSS_DIR/$FILE" >> "$OUTPUT_FILE"
  echo "" >> "$OUTPUT_FILE" # Add a newline for separation
done

echo "✅ Success: CSS bundle created at assets/css/bundle.css"
