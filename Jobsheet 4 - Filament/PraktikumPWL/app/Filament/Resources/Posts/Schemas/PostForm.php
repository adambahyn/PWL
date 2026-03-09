<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DateTimePicker;

use Filament\Support\Markdown;

use App\Models\Category;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')->required()->minLength(5),
                TextInput::make('slug')->required()->unique(),
                Select::make('category_id')
                    ->label('Category')
                    ->options(
                        \App\Models\Category::all()->pluck('name', 'id')
                    )
                    ->required()
                    ->searchable()
                    ->searchPrompt('Search for a category')
                    ->preload(),
                ColorPicker::make('color'),
                // MarkdownEditor::make('content'),
                RichEditor::make('body'),
                FileUpload::make('image')
                ->disk('public')
                ->directory('posts'),
                TagsInput::make('tags'),
                Checkbox::make('published'),
                DateTimePicker::make('published_at'),
            ]);
    }
}
