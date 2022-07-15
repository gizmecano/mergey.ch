# Accessibility

According to the [documentation](https://icons.getbootstrap.com/#accessibility), various changes to the initial files may to be considered as images are purely decorative:

- Add `aria-hidden="true"` attribute (and not `role="img"` attribute)

In addition, various attributes (which are not used) seem to be able to be removed without rendering issues:

- Remove `height` and `width` attributes
- Remove `class` attributes
