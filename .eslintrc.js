module.exports = {
    root: true,
    env: {
        node: true
    },
    extends: [
        'plugin:vue/vue3-essential',
        '@vue/standard'
    ],
    parserOptions: {
        parser: 'babel-eslint'
    },
    ignorePatterns: ['/src/packages/*'],
    rules: {
        'no-console': process.env.NODE_ENV === 'production' ? 'warn' : 'off',
        'no-debugger': process.env.NODE_ENV === 'production' ? 'warn' : 'off',
        'no-useless-return': 'off',
        'no-unneeded-ternary': 'off',
        'no-constant-condition': 'off',
        'no-unreachable': 'off',
        'prefer-promise-reject-errors': 'off',
        'no-prototype-builtins': 'off',
        'vue/no-unused-vars': 'off',
        'no-multi-spaces': 'warn',
        'no-multiple-empty-lines': 'warn',
        'no-unused-vars': 'warn',
        'no-trailing-spaces': 'warn',
        'prefer-const': 'warn',
        'comma-dangle': 'warn',
        'vue/no-unused-components': 'warn'
    }
}
