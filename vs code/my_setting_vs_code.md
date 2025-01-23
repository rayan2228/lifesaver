## vs code json file

``` json
{
  // editor
  "editor.fontSize": 20,
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
  "eslint.alwaysShowStatus": true,
  //terminal
  "terminal.integrated.defaultProfile.windows": "Git Bash",
  "terminal.integrated.fontSize": 16,
  "terminal.integrated.fontWeight": "normal",
  "terminal.integrated.fontFamily": "Fira Code, Operator Mono",
  "workbench.iconTheme": "vscode-icons",
  // terminal customization
  // "workbench.colorCustomizations": {
  //   "terminal.background": "#1D2021",
  //   "terminal.foreground": "#A89984",
  //   "terminalCursor.background": "#A89984",
  //   "terminalCursor.foreground": "#A89984",
  //   "terminal.ansiBlack": "#1D2021",
  //   "terminal.ansiBlue": "#0D6678",
  //   "terminal.ansiBrightBlack": "#665C54",
  //   "terminal.ansiBrightBlue": "#0D6678",
  //   "terminal.ansiBrightCyan": "#8BA59B",
  //   "terminal.ansiBrightGreen": "#95C085",
  //   "terminal.ansiBrightMagenta": "#8F4673",
  //   "terminal.ansiBrightRed": "#FB543F",
  //   "terminal.ansiBrightWhite": "#FDF4C1",
  //   "terminal.ansiBrightYellow": "#FAC03B",
  //   "terminal.ansiCyan": "#8BA59B",
  //   "terminal.ansiGreen": "#95C085",
  //   "terminal.ansiMagenta": "#8F4673",
  //   "terminal.ansiRed": "#FB543F",
  //   "terminal.ansiWhite": "#A89984",
  //   "terminal.ansiYellow": "#FAC03B"
  // },
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
