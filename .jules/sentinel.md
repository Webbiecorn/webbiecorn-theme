## 2024-07-18 - Proactive Credential File Exclusion

**Vulnerability:** The repository contained an `sftp.example.json` file, indicating that developers likely use a corresponding `sftp.json` file for deployment credentials. This file was not present in the `.gitignore` file.

**Learning:** Even if a credential file isn't currently committed, its presence in a repository's file structure (e.g., as an example file) is a strong indicator of risk. A developer could easily create the real file and accidentally commit it if it's not explicitly ignored.

**Prevention:** Proactively add common credential filenames (`sftp.json`, `.env`, `secrets.yml`, etc.) to the `.gitignore` file as a preventative measure, especially when example or template files for them exist in the repository. This is a simple but critical defense-in-depth enhancement.
