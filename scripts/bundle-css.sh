#!/bin/bash
# This script bundles common CSS files into a single file for performance.

# Define the output file
OUTPUT_FILE="assets/css/bundle.css"

# List of CSS files to bundle, in order
FILES_TO_BUNDLE=(
    "assets/css/base.css"
    "assets/css/header.css"
    "assets/css/buttons.css"
    "assets/css/footer.css"
    "assets/css/animations.css"
    "assets/css/responsive.css"
    "assets/css/cookie-consent.css"
)

# Remove the old bundle to start fresh
rm -f $OUTPUT_FILE

# Concatenate all files into the output file
cat "${FILES_TO_BUNDLE[@]}" > $OUTPUT_FILE

# Output success message
echo "✅ CSS bundle created successfully at $OUTPUT_FILE"
