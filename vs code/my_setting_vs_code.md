## vs code json file

``` json
{
  // editor
  "editor.fontSize": 18,
  "editor.fontFamily": "Fira Code, Operator Mono",
  "editor.fontLigatures": true,
  "editor.wordWrap": "on",
  "editor.minimap.enabled": true,
  "editor.tokenColorCustomizations": {
    "textMateRules": [
      {
        "scope": "comment",
        "settings": {
          "fontStyle": "italic"
        }
      }
    ]
  },
  // cursor
  "editor.cursorSmoothCaretAnimation": "on",
  "editor.cursorBlinking": "expand",
  // config related to code formatting
  "editor.defaultFormatter": "esbenp.prettier-vscode",
  "editor.formatOnSave": true,
  "editor.formatOnPaste": true,
  "[javascript]": {
    "editor.formatOnSave": false,
    "editor.defaultFormatter": "esbenp.prettier-vscode"
  },
  "[javascriptreact]": {
    "editor.formatOnSave": false,
    "editor.defaultFormatter": "esbenp.prettier-vscode"
  },
  "editor.codeActionsOnSave": {
    "source.fixAll.eslint": "explicit",
    "source.fixAll.tslint": "explicit",
    "source.organizeImports": "explicit"
  },
  //terminal
  "terminal.integrated.defaultProfile.windows": "Git Bash",
  "terminal.integrated.fontSize": 16,
  "terminal.integrated.fontWeight": "normal",
  "terminal.integrated.fontFamily": "Fira Code, Operator Mono",
  "workbench.iconTheme": "vscode-icons",
  "workbench.colorTheme": "darkLover",
  "window.zoomLevel": 1,
  "files.autoSave": "onFocusChange",
  "editor.mouseWheelZoom": true,
  "reactSnippets.settings.importReactOnTop": false,
  "git.enableSmartCommit": true,
  "git.confirmSync": false,
  "git.autofetch": true,
  "diffEditor.ignoreTrimWhitespace": true,
  "editor.dropIntoEditor.preferences": ["text.plain"],
  // extension
  "headwind.removeDuplicates": true,
  "headwind.runOnSave": true,
  "code-runner.clearPreviousOutput": true,
  "code-runner.runInTerminal": true,
  "code-runner.saveAllFilesBeforeRun": true
}


```
