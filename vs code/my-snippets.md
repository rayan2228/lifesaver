``` js
{
	"React TypeScript Component With Interface": {
		"prefix": "mrfi",
		"body": [
			"import { FC, ReactNode } from 'react';",
			"",
			"interface ${TM_FILENAME_BASE}Props {",
			"  children?: ReactNode;",
			"}",
			"",
			"const ${TM_FILENAME_BASE}: FC<${TM_FILENAME_BASE}Props> = ({ children }) => {",
			"  return (",
			"    <div>",
			"      {children}",
			"    </div>",
			"  );",
			"};",
			"",
			"export default ${TM_FILENAME_BASE};"
		],
		"description": "Creates a React TypeScript functional component with children support and the filename as the component name."
	},
	"React TypeScript Component": {
		"prefix": "mrfc",
		"body": [
			"import { FC } from 'react';",
			"",
			"const ${TM_FILENAME_BASE}: FC = () => {",
			"  return (",
			"    <div>${TM_FILENAME_BASE}</div>",
			"  );",
			"};",
			"",
			"export default ${TM_FILENAME_BASE};"
		],
		"description": "Creates a React TypeScript functional component with the filename as the component name."
	}
}
```
